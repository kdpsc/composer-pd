# Backend - Node image
FROM node:8
# Image maintainer label
LABEL maintainer 'Passei Direto'
# Work directory
WORKDIR	/usr/src/app
# Copy the backend content to WORKDIR
COPY ./backend/* ./
# Run node package manager install
RUN	npm install
# Expose the application on port 8888
EXPOSE	8888
# This command is executed whem starting this container
CMD	[ "npm", "start" ]
