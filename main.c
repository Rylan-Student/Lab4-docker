/* main.c
 * Simple program that uses isOdd() to check if a number is odd.
 * Usage: ./check_odd <integer>
 */
#include <stdio.h>
#include <stdlib.h>
#include "isOdd.h"

int main(int argc, char *argv[]) {
    if (argc != 2) {
        printf("Usage: %s <integer>\n", argv[0]);
        return 1;
    }

    char *end;
    long n = strtol(argv[1], &end, 10);
    if (*end != '\0') {
        fprintf(stderr, "Error: '%s' is not a valid integer\n", argv[1]);
        return 1;
    }

    if (isOdd(n))
        printf("%ld is odd\n", n);
    else
        printf("%ld is even\n", n);

    return 0;
}
