module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      options: {
        manage: false
      },
      my_target: {
        files: {
          'compiled/main.min.js': ['javascript.js']
        }
      }
    },

    cssmin: {
      my_target: {
        files: [{
          expand: true,
          cwd: '',
          src: ['*.css', '!*min.css'],
          dest: 'compiled/',
          ext: '.min.css'
        }]
      }
    },

  });
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.registerTask('default',["uglify","cssmin"]);
};
