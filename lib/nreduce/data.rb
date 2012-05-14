module NReduce
  class Data
    def self.setup
      Parse.init :application_id => ENV["PARSE_APPLICATION_ID"],
                 :api_key        => ENV["PARSE_API_KEY"]
    end
  end
end