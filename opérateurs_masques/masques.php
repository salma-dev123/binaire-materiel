Imaginons des droits sur 3 bits :
bit0=READ, bit1=WRITE, bit2=EXEC.
flags = 0b0000_0101 (READ + EXEC).

Tester si READ actif :
if (flags & (1 << 0)) { ... } → vrai

Poser WRITE :
flags |= (1 << 1) → 0b0000_0111

Retirer EXEC :
flags &= ~(1 << 2) → 0b0000_0011

Basculer READ :
flags ^= (1 << 0) → toggle du bit0