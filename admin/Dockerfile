# base image
FROM node:15-alpine

# set working directory
WORKDIR /app

# add `/app/node_modules/.bin` to $PATH
ENV PATH /app/node_modules/.bin:$PATH

# install and cache app dependencies
COPY ./package*.json /app/

RUN yarn install
RUN npm install @vue/cli@3.7.0 -g

COPY . .

# start app
CMD ["yarn", "serve"]