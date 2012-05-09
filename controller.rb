require 'haml'
require 'coffee_script'
require 'sass'
require 'active_support/all'

ignore /\/_.*/
layout "layout.html.erb"

PROJECT_ROOT = File.dirname(__FILE__)

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
end