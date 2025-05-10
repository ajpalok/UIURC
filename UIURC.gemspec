# frozen_string_literal: true

Gem::Specification.new do |spec|
  spec.name          = "UIURC"
  spec.version       = "0.1.0"
  spec.authors       = ["Abrar Jahin"]
  spec.email         = ["palok1969@gmail.com"]

  spec.summary       = "UIU Robotics is a student-run club of undergraduate and graduate students from United International University. The purpose of the Organization is to explore new engineering technology, learn crucial skills and promote the field of robotics."
  spec.homepage      = "https://ajpalok.github.io/UIURC/"
  spec.license       = "MIT"

  spec.files         = `git ls-files -z`.split("\x0").select { |f| f.match(%r!^(assets|_data|_layouts|_includes|_sass|LICENSE|README|_config\.yml)!i) }

  spec.add_runtime_dependency "jekyll", "~> 4.4"
end
