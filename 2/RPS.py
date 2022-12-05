filepath = 'source.txt'
solution = 0
with open(filepath) as fp:
   line = fp.readline()
   while line:
       first = line[0:1]
       second = line[2:3]
       print(first," ",second)
       if second == 'X':
           solution += 1
       elif second == 'Y':
           solution += 2
       elif second == 'Z':
           solution += 3


       if first == 'A' and second == 'Y' or first == 'B' and second == 'Z' or first == 'C'and second == 'Y':
            solution += 6

       elif first == 'A'and second == 'X' or first == 'B' and second == 'Y' or first == 'C'and second == 'Z':
            solution += 3

       elif first == 'A'and second == 'Z' or first == 'B' and second == 'X' or first == 'C'and second == 'X':
           solution += 0
       print(solution)

       line = fp.readline()
print(solution)