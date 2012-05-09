$ = jQuery
$.parse.init
  app_id : "sgYYB0xyyyt1yNIzFNWuyUOsB2oojvQcvL698lD4"
  rest_key : "GBbOOaqjYFff3og7eXJaLZQUJTqP9dFMFOUfBwOi"

$(document).on
  ready: ->
    console.log("ncombinator says hi!")

    $(".example").each (index) ->
      self = $(this)
      self.example(self.attr("title"))


    checkSelected = ->
      selected = []
      $(".pick label.on").each (index) ->
        selected.push($(this).data("type"))
      selected

    blurSignupFields = ->
      setTimeout ->
        $("#signup-box input[type=text]").blur()
      , 500


    $("#signup-box").each (index) ->
      signup = $(this)

      $(".pick label").click (e) ->
        e.preventDefault()
        $(this).toggleClass("on")

      # setup submit button
      signup.find(".submit").click (e) ->
        signup.trigger("submit")

      # handle submit
      signup.submit (e) ->
        e.preventDefault()

        console.log("Submitting form")
        signup.find(".success-msg").hide()

        # post data to parse
        postData =
          name: signup.find("input[name=name]").not(".hint").val()
          email: signup.find("input[name=email]").not(".hint").val()
          selectedTypes: checkSelected()

        if !postData.email
          alert("Please enter a valid email to sign up. Thanks!")
          blurSignupFields()
          return

        if !postData.selectedTypes or postData.selectedTypes.length == 0
          alert("Which roles are you intersted in?")
          blurSignupFields()
          return

        return if signup.data("in-progress")
        signup.data("in-progress", "true")

        $.parse.post 'signups_prod', postData, (json) ->
          console.log("Posted signup")
          signup.find("input[type=text]").val("")
          signup.find(".success-msg").fadeIn()
          signup.data("in-progress", null)
          blurSignupFields()
