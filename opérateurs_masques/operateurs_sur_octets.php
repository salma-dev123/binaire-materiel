Prenons :
A = 0x6D = 0110 1101₂ (109)
B = 0x53 = 0101 0011₂ (83) 

ET : A & B = 0111? → non, calcul exact :
0110 1101
0101 0011
& → 0100 0001 = 0x41 (65) // 1 si les deux bits sont à 1

OU : A | B = 0111 1111 = 0x7F (127) //1 si au moins un des bits est 1
XOR : A ^ B = 0011 1110 = 0x3E (62) //1 si un seul des bits est à 1
NOT (sur 8 bits) : ~A = 1001 0010 = 0x92 (146) //inversion des bits