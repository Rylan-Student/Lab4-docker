# Makefile for isOdd lab
CC = gcc
CFLAGS = -std=c11 -Wall -Wextra -O2
TARGET = check_odd
SRCS = main.c isOdd.c
OBJS = $(SRCS:.c=.o)

.PHONY: all clean

all: $(TARGET)

$(TARGET): $(OBJS)
	$(CC) $(CFLAGS) -o $@ $(OBJS)

%.o: %.c
	$(CC) $(CFLAGS) -c $< -o $@

clean:
	rm -f $(OBJS) $(TARGET)
