#include <stdio.h>

main()
{
 int c;
 int c2;
 int c3;
 int pc=0;
 char done=0;

 while (EOF != (c = getchar()))
  if (1 == done)
   putchar(c);
  else
  {
  if (0x39 == c)
  { 
   c2 = getchar();
   if (0xb2 == c2)
   {
    c3 = getchar();
    if (0x72 == c3)
    {
     putchar(0xdd);
     putchar(0xdd);
     putchar(0xdd);
     pc++;
     if (135 == pc) done=1;
    }
    else
    {
     putchar(c);
     ungetc(c3, stdin);
     ungetc(c2, stdin);
    }
   }
   else
   {
    putchar(c);
    ungetc(c2, stdin);
   }
  }
  else
   putchar(c);
  }
}
