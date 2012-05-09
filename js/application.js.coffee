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

        return if signup.data("in-progress")
        signup.data("in-progress", "true")

        console.log("Submitting form")

        # post data to parse
        postData =
          name: signup.find("input[name=name]").not(".hint").val()
          email: signup.find("input[name=email]").not(".hint").val()
          selectedTypes: checkSelected()

        $.parse.post 'signups_prod', postData, (json) ->
          console.log("Posted signup")
          signup.find("input[type=text]").val("")
          signup.find(".success-msg").show()
          signup.data("in-progress", null)
