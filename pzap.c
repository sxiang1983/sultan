#include <stdio.h>

main()
{
 int c;

 while (EOF != (c = getchar()))
  if (0xe5 == c)
   putchar(0xff);
  else
   putchar(c);
}
