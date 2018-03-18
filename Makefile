# Target for the main scss/css file
index:
	 node-sass ./scss/index.scss ./css/index.css

# Useful for on the fly rendering 
input:
		@read -p "Enter scss file name": fname; \
		node-sass ./scss/$$fname.scss ./css/$$fname.css
