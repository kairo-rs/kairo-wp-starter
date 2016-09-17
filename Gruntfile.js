module.exports = function(grunt) {

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		 /*
		  * sass
		  */
		
		sass: {
			dev: {
				options: {
					style: 'expanded'
				},
				files: {
					'compiled/style-uncompressed.css' : 'sass/style.scss'
				}
			},
			dist: {
				options: {
					style: 'compressed',
					sourcemap: 'none'
				},
				files: {
					'compiled/style.css' : 'sass/style.scss'
				}
			}

		},

		 /*
		  * Autoprefixer
		  */
		
		autoprefixer: {
			options: {
				browsers: ['last 4 versions']
			},

			//prefix all files
			multiple_files: {
				expand: true,
				flatten: true,
				src: 'compiled/*.css',
				dest:''
			}
		},

		/**
		  * Watch task
		  */

		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass','autoprefixer']
			}
		}

	});   /*end init config*/

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.registerTask('default', ['watch']);
}