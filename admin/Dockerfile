# base image
FROM node:15-alpine

RUN mkdir -p /app
COPY ./admin/ /app/
COPY ./admin/package.json /app/

# set working directory
WORKDIR /app

# add `/app/node_modules/.bin` to $PATH
ENV PATH /app/node_modules/.bin:$PATH

# install and cache app dependencies
# COPY ./package*.json /app/

RUN yarn install
RUN npm install @vue/cli@3.7.0 -g

COPY . .
RUN yarn build

EXPOSE 8101

# start app
CMD ["yarn", "run", "serve"]