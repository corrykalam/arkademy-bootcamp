def splitx(data): 
    return [char for char in data]
def divideAndSort(number):
    angka = 0
    x = number.split(str(angka))
    ret = ""
    for sort in x:
        sort2 = splitx(sort)
        sort2.sort()
        ret += "".join(sort2)
    return int(ret)
print(divideAndSort("5956560159466056"))