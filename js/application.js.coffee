$ = jQuery

$(document).on
  ready: ->
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

        postData.name = "" if postData.name == "Your Name"

        if !postData.email or postData.email == "Your Email"
          alert("Please enter a valid email to sign up. Thanks!")
          blurSignupFields()
          return

        if !postData.selectedTypes or postData.selectedTypes.length == 0
          alert("Which roles are you interested in?")
          blurSignupFields()
          return

        return if signup.data("in-progress")
        signup.data("in-progress", "true")

        $.ajax
          type: "POST"
          url: "http://new.nreduce.com/signup"
          data: postData
          dataType: "json"
          success: (json) ->
            if json.success
              console.log("Posted signup")
              console.log(json)
              signup.find("input[type=text]").val("")
              signup.find(".success-msg").fadeIn()
              signup.data("in-progress", null)
              blurSignupFields()
              return true
            else
              alert("Please enter a valid name and email")
          error: (xhr) ->
            alert("Sorry, something went wrong. Please try again.")
          complete: ->
            signup.removeData("in-progress")

