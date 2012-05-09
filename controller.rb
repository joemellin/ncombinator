require 'haml'
require 'coffee_script'
require 'sass'
require 'active_support/all'
require 'bourbon'

ignore /\/_.*/
layout "layout.html.erb"

PROJECT_ROOT = File.dirname(__FILE__)

before "skrollr.html.erb" do
  layout "no_layout.html.erb"
end

helpers do
  def html_files
    results = []
    Dir["#{PROJECT_ROOT}/**/*.html*"].each do |file|

      # get rid of directories
      next if File.directory?(file)

      # get rid of stuff in the build folder
      file = file.gsub("#{PROJECT_ROOT}/", "")
      next if file.starts_with?("build/")

      # get rid of partials the start with "_"
      next if File.basename(file).starts_with?("_")

      # remove everything after the .html
      results << (file.split(".html").first + ".html")
    end
    results
  end

  # Writes a br tag
  def br
    "<br />"
  end

  # Writes an hr tag
  def hr
    "<hr />"
  end

  # Writes a clear tag
  def clear_tag(tag, direction = nil)
    if tag == :br
      "<br class=\"clear#{direction}\" />"
    else
      "<#{tag} class=\"clear#{direction}\"></#{tag}>"
    end
  end

  def current_year
    Time.now.strftime("%Y")
  end

  # Writes a clear div tag
  def clear(direction = nil)
    clear_tag(:div, direction)
  end

  # Return some lorem text
  def lorem
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  end

  # provides a slick way to add classes inside haml attribute collections
  #
  # examples:
  #   %div{add_class("current")}
  #   #=> adds the "current" class to the div
  #
  #   %div{add_class("current", :if => current?)}
  #   #=> adds the "current" class to the div if current? method
  #
  #   %div{add_class("highlight", :unless => logged_in?)}
  #   #=> adds the "highlight" class to the div unless logged_in? method returns true
  def add_class(css_class, options = {})
    return {} unless css_class

    attributes = {:class => css_class}

    if options.has_key?(:unless)
      return options[:unless] ? {} : attributes
    end

    if options.has_key?(:if)
      return options[:if] ? attributes : {}
    end

    attributes
  end

  def add_class_if(css_class, condition)
    add_class(css_class, :if => condition)
  end

  def add_class_unless(css_class, condition)
    add_class(css_class, :unless => condition)
  end

  # Return a hidden attribute hash (useful in Haml tags - %div{hidden})
  def hide(options = {})
    attributes = {:style => "display:none"}

    if options.has_key?(:unless)
      return options[:unless] ? {} : attributes
    end

    if options.has_key?(:if)
      return options[:if] ? attributes : {}
    end

    attributes
  end
  alias :hidden :hide

  # Return a hidden attribute hash if a condition evaluates to true
  def hide_if(condition)
    hide(:if => condition)
  end
  alias :hidden_if :hide_if
  alias :show_unless :hide_if

  # Return a hidden attribute hash if a condition evaluates to false
  def hide_unless(condition)
    hide(:unless => condition)
  end
  alias :hidden_unless :hide_unless
  alias :show_if :hide_unless

end