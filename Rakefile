desc "Compile"
task :compile do
  puts `rm -Rf ./build/`
  puts `rm -Rf ./deploy/`
  puts `bundle exec stasis -p build`
end

desc "Deploy to Dreamhost"
task :deploy => :compile do
  opts = ""

  # archive
  opts << "a"

  # recursive
  opts << "r"

  # verbose
  opts << "v"

  # uncomment this for dry run
  # opts << "n"

  puts `rsync -#{opts} --exclude-from .rsync_exclude ./build/ railsjedi@crate.dreamhost.com:/home/railsjedi/nreduce.com/new`
end

load File.expand_path("../lib/nreduce/tasks.rake", __FILE__)