/* isOdd.c
 * Implementation of isOdd.
 */
#include "isOdd.h"

bool isOdd(long n) {
    /* Use bitwise & to test lowest bit. Works for negative and positive integers. */
    return (n & 1L) != 0;
}
