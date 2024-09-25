red = "\033[91m"
reset = "\033[0m"
import json

#1
soma = 0
k = 0
while k < 13:
    k = k + 1
    soma = soma + k
print(f'\n1) Valor final da variável SOMA: {soma}')




#2
num = input("\n2) Informe um inteiro não negativo: ")
while not num.isdigit():
    num = input("Entrada inválida. Digite apenas um inteiro não negativo: ")
num = int(num)

fibonacci = [0, 1]
i = 1
if num > 1:
    while fibonacci[i] <= num:
        fibonacci.append(fibonacci[i - 1] + fibonacci[(i)])
        i += 1
    if fibonacci[-2] == num:
        print(f'O número {num} faz parte da sequência de Fibonacci.')
    else:
        print(f'O número {num} {red}não{reset} faz parte da sequência de Fibonacci.')
elif num == 0 or num == 1:
    print(f'O número {num} faz parte da sequência de Fibonacci.')




#3)
with open('mensal.json', 'r') as file:
    faturamento_mensal = json.load(file)

dias_sem_faturamento = 0
faturamento_total = 0
for valor in faturamento_mensal:
    if valor == 0:
        dias_sem_faturamento += 1
    faturamento_total += valor

media_mensal = faturamento_total / (30 - dias_sem_faturamento)

acima_da_media = 0
menor_valor = max(faturamento_mensal)
for valor in faturamento_mensal:
    if valor > media_mensal:
        acima_da_media += 1
    if valor != 0 and valor < menor_valor:
        menor_valor = valor

print(f'\n3)\nDias sem faturamento: {dias_sem_faturamento}')
print(f'Faturamento total do mês: {faturamento_total}')
print(f'Média mensal: {media_mensal:.2f}')
print(f'Menor valor de faturamento em um dia: {menor_valor}')
print(f'Maior valor de faturamento em um dia: {max(faturamento_mensal)}')
print(f'Total de dias em que o faturamento foi acima da média: {acima_da_media}')



#4
print('\n4)')
def percentualFaturamento(faturamento):
    total = 0
    for estado in faturamento:
        total += faturamento[estado]
    print(f'Faturamento total: {total}')
    for estado in faturamento:
        print(f'{estado}: {(faturamento[estado]/total)*100:.2f}%')


faturamento_mensal_estado = {
    'SP': 67836.43,
    'RJ': 36678.66,
    'MG': 29229.88,
    'ES': 27165.48,
    'Outros': 19849.53
}
#
percentualFaturamento(faturamento_mensal_estado)




#5
print('\n5)')
cadeia = input('Digite qualquer coisa: ')
cadeia_invertida = ''

for i in range(len(cadeia) -1, -1, -1):
    cadeia_invertida += cadeia[i]
print(cadeia_invertida)