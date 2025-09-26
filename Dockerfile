FROM gcc:latest
WORKDIR /app
COPY . .
RUN make
RUN chmod +x ./main.c
CMD ["./main"]
