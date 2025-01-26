FROM node:23-alpine

WORKDIR /src

COPY package*.json ./
RUN npm install

COPY . .

ARG PORT=3000
ENV PORT=${PORT}

EXPOSE ${PORT}

CMD ["npm", "run", "dev"]
