module.exports = function(grunt) {

 // Project configuration.
 grunt.initConfig({
   pkg: grunt.file.readJSON('package.json'),
   jade: {
   		html: {
   			files: {
   				'dist/': ['dev/*.jade']
   			},
  			options: {
  				client: false
  			}
  		},
	},
  sass: {
	dist: {
	files: {
	'css/main.css' : 'css/main.scss'
	}
	}
},
watch: {
	css: {
		files: ['css/main.scss'],
		tasks: ['sass', 'autoprefixer']
	},
	html : {
		files: ['dev/*.jade'],
		tasks: ['jade']
	},
	options: {
		livereload: true
	}
},
autoprefixer: {
	options: {
		browsers: ['last 5 version', 'ie 7', 'ie 8', 'ie 9']
	},
	no_dest: {
		src: 'css/main.css'
	}
 },
 connect: {
 	server: {
 		options: {
 			port: 9001,
 			base: 'dist/'
 		}
 	}
 }
});

grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-autoprefixer');
grunt.loadNpmTasks('grunt-contrib-connect');
grunt.loadNpmTasks('grunt-jade');

 // Default task(s).
 grunt.registerTask('default', ['connect','watch']);
};