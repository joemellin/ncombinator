desc "Compile"
task :compile do
  puts `rm -Rf ./build/`
  puts `bundle exec stasis -p build`
end

desc "Deploy to Dreamhost"
task :deploy => :compile do
  opts = ""

  # archive
  opts << "a"

  # verbose
  opts << "v"

  # dry run
  opts << "n"

  puts `rsync -#{opts} ./build/ railsjedi@crate.dreamhost.com:/home/railsjedi/ncombinator.com`
end