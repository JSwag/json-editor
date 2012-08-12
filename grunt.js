/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    concat: {
      dist: {
        src: 'admin/js/src/*.js',
        dest: 'admin/js/json-editor.js'
      }
    },
    
    less: {
      dev: {
        src: 'admin/css/style.less',
        dest: 'admin/css/style.css'
      }
    },

    watch: {
      files: ['admin/js/**/*.js', 'admin/css/style.less'],
      tasks: 'concat'
    }
  });

  // Custom tasks
  grunt.registerTask('default', 'less:dev concat');
  
};