dat = open('source.txt').read().split('\n')
az = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
# Part 1
print(sum(az.index(''.join(set(d[:len(d)//2]).intersection(d[len(d)//2:]))) + 1 for d in dat))

# Part 2
groups = [dat[i:i + 3] for i in range(0, len(dat), 3)]
print(sum(az.index(''.join(set.intersection(*map(set, g)))) + 1 for g in groups))