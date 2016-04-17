module.exports = function(grunt) {

  grunt.initConfig({

// concatenate css files
    concat: {
      dist: {
        src: [
/*
          'bower_components/jquery-ui/themes/base/jquery-ui.css',
          'bower_components/fullcalendar/dist/fullcalendar.css',
          'bower_components/bootstrap/dist/css/bootstrap.css'
*/
        ],
        dest: 'lib/built.css'
      }
    },

    // bower main files
    bower:{
      dev: {
        base: 'bower_components',
        dest: 'test',
        options: {
          checkExistence: true,
          debugging: true,
          paths: {
            bowerDirectory: 'bower_components',
            bowerrc: '.bowerrc',
            bowerJson: 'bower.json'
          }
        }
      },
      flat: {
        dest: 'lib',
        options:{
          debugging: true
        }
      }

    },
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('main-bower-files');

  grunt.registerTask('default', ['bower', 'concat']);

};
