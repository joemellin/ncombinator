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

        if !postData.email
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
          url: "http://localhost:3000/signup"
          data: postData
          dataType: "json"
          success: (json) ->
            console.log("Posted signup")
            signup.find("input[type=text]").val("")
            signup.find(".success-msg").fadeIn()
            signup.data("in-progress", null)
            blurSignupFields()
          error: (xhr) ->
            alert("Sorry, something went wrong. Please try again.")


    # SCROLLORAMA!
    # initialize the plugin, pass in the class selector for the sections of content (blocks)
    scrollorama = $.scrollorama
      blocks: '.scrollblock'
      enablePin: true

    # assign function to add behavior for onBlockChange event
    slideBackgrounds = $(".slide-bg")
    scrollorama.onBlockChange ->
      i = scrollorama.blockIndex
      currentBlock = scrollorama.settings.blocks.eq(i)
      currentBlockId = currentBlock.attr('id')

      # set console
      $('#console')
        .text('onBlockChange | blockIndex:'+i+' | current block: '+currentBlockId)

      currentBackground = currentBlock.find(".slide-bg")
      slideBackgrounds.filter(":visible").not(currentBackground).fadeOut("slow")
      currentBackground.not(":visible").fadeIn("slow")

    # scrollorama.animate("#idea_team", { duration: 100, property:'opacity', start:0, pin: true })
    # scrollorama.animate("#killer", { delay: 100, duration: 100, property:'opacity', start:0, pin: true })
    # scrollorama.animate("#and", { delay: 200, duration: 100, property:'opacity', start:0, pin: true })
    # scrollorama.animate("#ninja", { delay: 300, duration: 100, property:'opacity', start:0, pin: true })
    #
    # scrollorama.animate(".lightbulb-icon", { delay: 100, duration: 100, property:'opacity', start:0, pin: true })
    # scrollorama.animate(".plus-icon", { delay: 200, duration: 100, property:'opacity', start:0, pin: true })
    # scrollorama.animate(".ninja-icon", { delay: 300, duration: 100, property:'opacity', start:0, pin: true })
    #
    # scrollorama.animate("#difference", { delay: 400, duration: 100, property:'opacity', start:0, pin: true })
    # scrollorama.animate(".arrow-icon", { delay: 500, duration: 100, property:'opacity', start:0, pin: true })
    #
    # scrollorama.animate('.ninja',{ delay: 100, duration: 300, property:'margin', start:500, pin: true })
    # scrollorama.animate('.red',{ delay: 400, duration: 100, property:'rotate', start:0, end: 45, pin: true })


    # scrollorama.animate('#compare_slide_bg', {delay: 400, duration: 300, property:'opacity', start:0, end: 1.0 })
    # scrollorama.animate('#signup_slide_bg', {delay: 400, duration: 300, property:'opacity', start:0, end: 1.0 })

    # # lettering.js for coolness
    # $('#title').lettering()
    # $('#title span')
    #   .css('display','block')
    #   .css('float','left')
    # $('.char9')
    #   .css('padding-left','6px')
    #
    # # animate the title letters to explode
    # scrollorama.animate('#title',{ duration: 300, property:'zoom', end: 8 })
    # scrollorama.animate('#author',{ duration: 10, property:'z-index', end: 0 })
    # $('#title span').each ->
    #   scrollorama.animate($(this),{ duration: 400, property:'top', end: Math.random()*120-180 })
    #   scrollorama.animate($(this),{ duration: 300, property:'rotate', start:0, end:Math.random()*720-360 })
    #
    # # animate some examples
    # scrollorama.animate('#unpin',{ duration:500, property:'padding-top', start:400, pin:true })
    # scrollorama.animate('#fade-in',{ delay: 400, duration: 300, property:'opacity', start:0 })
    # scrollorama.animate('#fly-in',{ delay: 400, duration: 300, property:'left', start:-1400, end:0 })
    # scrollorama.animate('#rotate-in',{ duration: 800, property:'rotate', start:720 })
    # scrollorama.animate('#zoom-in',{ delay: 200, duration: 600, property:'zoom', start:8 })
    # scrollorama.animate('#any',{ delay: 700, duration: 200, property:'opacity', start:0 })
    # scrollorama.animate('#any',{ delay: 800, duration: 200, property:'letter-spacing', start:18 })
    #
    # # animate the parallaxing
    # scrollorama.animate('#parallax2',{ delay: 400, duration: 600, property:'top', start:800, end:-800 })
    # scrollorama.animate('#parallax3',{ delay: 200, duration: 1200, property:'top', start:500, end:-500 })
    #
    # # animate some easing examples
    # $easing = $('#easing')
    # $clone = $easing.clone().appendTo('#examples-easing').css({position:'relative',top:'-2.95em'}).lettering()
    # $easing.css({ color: '#131420', textShadow: '0 1px 0 #363959' })
    # easing_array = [
    #   'easeOutBounce'
    #   'easeOutQuad'
    #   'easeOutCubic'
    #   'easeOutQuart'
    #   'easeOutQuint'
    #   'easeOutExpo'
    # ]

    # $clone.find('span')
    #   .each (idx, el) ->
    #     scrollorama.animate $(this)
    #       delay:400,
    #       duration: 500,
    #       property:'top',
    #       end: 300,
    #       easing: easing_array[idx]
