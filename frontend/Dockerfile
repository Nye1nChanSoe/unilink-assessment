FROM node:23-alpine

# alphine doesn't have bash
RUN apk add --no-cache bash

WORKDIR /src

COPY package*.json ./
RUN npm install

COPY . .

ARG PORT=3000
ENV PORT=${PORT}

EXPOSE ${PORT}

CMD ["npm", "run", "dev"]
