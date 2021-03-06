'use strict';
module.exports = function(grunt) {

  // load all grunt tasks matching the `grunt-*` pattern
  require('load-grunt-tasks')(grunt);

  // Load Time-grunt individually because it doesn't match the grunt-* pattern
  require('time-grunt')(grunt);

  grunt.initConfig({

    // watch for changes and trigger sass, concat, uglify and livereload
    watch: {
      icons: {
        files: ['icons/*.svg'],
        tasks: ['webfont']
      },
      sass: {
        files: ['scss/**/*', 'scss/*'],
        tasks: ['sass:dev']
      },
      js: {
        files: [
          'Gruntfile.js',
          'js/*',
          'js/**/*'
        ],
        tasks: ['concat']
      },
      svg: {
        files: ['svg/*'],
        tasks: ['svgmin', 'svg2png']
      },
      livereload: {
        options: { livereload: true },
        files: [
          '../dist/css/*',
          '../dist/js/*',
          '../dist/*.php',
          '../dist/includes/**/*.php'
        ]
      }
    }, // end watch

    // Compress all svg files
    // (Not the ones used for icon-fonts)
    svgmin: {
      options: {
        plugins: [{
          removeViewBox: false
        }]
      },
      dist: {
        files: [{
          expand: true,
          cwd: 'svg',
          src: ['**/*.svg'],
          dest: '../dist/img/',
          ext: '.svg'
        }]
      }
    },

    // convert svg to png for fallbacks (via modernizr)
    svg2png: {
      all: {
        // specify files in array format with multiple src-dest mapping
        files: [
          // rasterize all SVG files in "img" and its subdirectories to "img/png"
          { src: ['svg/*.svg'], dest: '../dist/img/' }
        ]
      }
    },

    // To generate the icon fonts from the files in my ./src/icons/ directory
    webfont: {
      icons: {
        src: "icons/*.svg",
        dest: "../dist/fonts",
        options: {
          hashes: false,
          htmlDemo: false,
          stylesheet: "scss"
        }
      }
    },

    // sass and scss
    sass: {
      dev: {
        options: {
          style: 'nested',
          precision: '2',
          compass: true,
          cache: '.delete/'
        },
        files: {
          '../dist/css/style.css':'scss/style.scss',
          '../dist/css/no-mq.css':'scss/no-mq.scss'
        }
      },
      dist: {
        options: {
          style: 'compressed',
          precision: '2',
          compass: true,
          cache: '.delete/'
        },
        files: {
          '../dist/css/style.css':'scss/style.scss',
          '../dist/css/no-mq.css':'scss/no-mq.scss'
        }
      }
    },

    // concat files
    concat: {
      dev : {
        files: {
          '../dist/js/script.min.js': [
            'js/plugins/*'
          ],
          '../dist/js/app.min.js': [
            'js/app.js'
          ],
          '../dist/js/modernizr.min.js': [
            'js/vendor/modernizr.js'
          ],

        }
      },
      dist: {
      // to avoid ie errors on uglify
        files: {
          '../dist/js/ie.min.js': [
            'js/ie/*'
          ]
        }
      }
    },

    // uglify to concat & minify
    uglify: {
      dist: {
        files: {
          '../dist/js/script.min.js': [
            'js/vendor/*',
            'js/plugins/*'
          ],
          '../dist/js/app.min.js': [
            'js/app.js'
          ]
        }
      }
    },

  });

  // register task
  grunt.registerTask('dev', ['watch']);
  grunt.registerTask('dist', ['sass:dist', 'concat:dist', 'uglify:dist', 'svgmin', 'svg2png' ]);

};
