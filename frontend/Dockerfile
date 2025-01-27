FROM node:20-alpine

# tools needed by sharp
RUN apk add --no-cache bash python3 make g++

WORKDIR /usr/src/app

COPY package*.json ./

RUN npm install --include=optional --verbose

COPY . .

EXPOSE 3000

CMD ["npm", "run", "dev"]w
