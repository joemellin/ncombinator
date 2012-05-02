group 'assets' do
  # Reload the browser as asset files change
  guard 'livereload', :apply_js_live => false do
    watch(%r{^(public/).+\.(css|js|html)$})
  end

  # prevalidate coffeescript syntax on save
  guard 'coffeescript', :input => '.', :noop => true #, :hide_success => true
end