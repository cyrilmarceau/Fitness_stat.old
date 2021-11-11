# base image
FROM node:15-alpine



# add `/app/node_modules/.bin` to $PATH
ENV PATH /app/node_modules/.bin:$PATH

# install and cache app dependencies
COPY ./admin/package*.json /app/

# set working directory
WORKDIR /app

RUN npm install
RUN npm install @vue/cli@3.7.0 -g

# start app
CMD ["yarn", "serve"]