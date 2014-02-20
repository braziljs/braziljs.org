module.exports = function(grunt) {

  grunt.initConfig({

    validation: {
      options: {
        reportpath: false,
        reset: true,
        stoponerror: false
      },
      files: {
        src: ['out/**/*.html']
      }
    }

  });

  grunt.loadNpmTasks('grunt-html-validation');

  grunt.registerTask('default', 'validation');

};