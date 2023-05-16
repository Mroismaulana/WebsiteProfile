
# Website Profile [![CodeFactor](https://www.codefactor.io/repository/github/mroismaulana/websiteprofile/badge)](https://www.codefactor.io/repository/github/mroismaulana/websiteprofile) [![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

Proyek ini bertujuan untuk mengembangkan sebuah website profil untuk SMK Asyafi'iyah 01. Website ini akan menjadi sarana yang menampilkan informasi lengkap mengenai sekolah, program pendidikan, fasilitas, prestasi, dan kegiatan sekolah lainnya.


## Authors

- [@Mroismaulana](https://github.com/Mroismaulana) (LORD | NPC | Ketuak | INTERNAL)
- [@marrr26](https://github.com/marrr26) (NPC | BABU | CO-Ketuaks | INTERNAL)
- [@maul-lq](https://github.com/maul-lq) (TUKANG NGODING | BABU | MASTER)
- [@Alllwee](https://github.com/Alllwee) (HABIB MASA DEPAN | BABU | MC | INTERNAL)

## Fitur

- Halaman Utama (Home)
- Visi Misi
- Profil Guru
- Ruang Lab
- Study Tour
- Ujian
- Jurusan
- Ekstrakulikuler
- LDKS
- Pendaftaran Online
- DLL.

## Cara Pasang
1. Install XAMPP (kalo belum punya)
2. Download File Rilis
3. Taro File Rilis Di HTDOCS
4. Buat Database dengan nama yang sesuai ada di folder `.database` Import Database
5. Selesai?



## Usage/Examples

```python
from os import system
from typing import Literal
import math
from rich import print
from numpy import array, diag, dot, linalg, round
from scipy.linalg import eig
from numpy import poly1d


LAMBDA: str = "[#ffbf00]\u03BB[/]"
KOSONG = ""
AKAR: str = "[#e85976]\u221A[/]"
SUB_NO: list[str] = ['[#e85976]\u2081[/]', '[#e85976]\u2082[/]']
SUP_NO: list[str] = ['[#e85976]\u00B9[/]', '[#e85976]\u00B2[/]', '[#e85976]⁻¹[/]']
BOX: dict[str] = {'btl': '\u250C', 'btr': '\u2510',
                  'bbl': '\u2514', 'bbr': '\u2518', 'bh': '\u2500', 'bv': '\u2502'}


class Matriks_Persegi_2x2:
    def __init__(matriks, Matriks_Persegi_2D: list[list[int | float]] | str, skalar: int | float = 1,/) -> None:
        matriks.a: int | float = Matriks_Persegi_2D[0][0]*skalar if Matriks_Persegi_2D[0][0]*skalar > math.floor(
            Matriks_Persegi_2D[0][0]*skalar) else math.floor(Matriks_Persegi_2D[0][0]*skalar)
        matriks.b: int | float = Matriks_Persegi_2D[0][1]*skalar if Matriks_Persegi_2D[0][1]*skalar > math.floor(
            Matriks_Persegi_2D[0][1]*skalar) else math.floor(Matriks_Persegi_2D[0][1]*skalar)
        matriks.c: int | float = Matriks_Persegi_2D[1][0]*skalar if Matriks_Persegi_2D[1][0]*skalar > math.floor(
            Matriks_Persegi_2D[1][0]*skalar) else math.floor(Matriks_Persegi_2D[1][0]*skalar)
        matriks.d: int | float = Matriks_Persegi_2D[1][1]*skalar if Matriks_Persegi_2D[1][1]*skalar > math.floor(
            Matriks_Persegi_2D[1][1]*skalar) else math.floor(Matriks_Persegi_2D[1][1]*skalar)
        matriks.I: list[list[int]] = [[1, 0], [0, 1]]
        matriks.A=array([[matriks.a*skalar, matriks.b*skalar],[matriks.c*skalar,matriks.d*skalar]])
        matriks.ndigits = 0

        pass

    def determinan(matriks) -> int | float:
        return (matriks.a*matriks.d)-(matriks.b*matriks.c)

    def trace(matriks) -> int | float:
        return matriks.a+matriks.d

    def rank(matriks) -> int:
        return int(linalg.matrix_rank(matriks.A))

    # Polynominal Karakteristik dari Matriks
    def poliK(matriks) -> str | tuple[Literal[1], int, int]:
        b = (-1*matriks.a)+(-1*matriks.d)
        c = (matriks.a*matriks.d) - (matriks.b*matriks.c)
        op1 = "[#ffffff] + [/]" if b > 0 else "[#ffffff] - [/]"
        op2 = "[#ffffff] + [/]" if c > 0 else "[#ffffff] - [/]"
        hasil = f"{LAMBDA}{SUP_NO[1]}{op1 if b != 0 else KOSONG}[#f2cc5a]{abs(b) if b != 0 else KOSONG}[/#f2cc5a]{LAMBDA if b != 0 else KOSONG}{op2 if c != 0 else KOSONG}[#00ffd9]{abs(c) if c != 0 else KOSONG}[/]"
        return hasil

    # Nilai Eigen dan Eigen Vektor dari matriks
    def eigen(matriks, dis_type:Literal[0,1,2,3]=0, /) -> (tuple[str] | tuple[list[complex,complex],tuple[list[float,float],list[float,float]]] | list[complex,complex] | tuple[list[float,float],list[float,float]]):
        eigenVal, eigenVec = eig(matriks.A)
        eival1_real_part = round(complex(eigenVal[0]).real,matriks.ndigits)
        eival1_imag_part = round(complex(eigenVal[0]).imag,matriks.ndigits)
        eival2_real_part = round(complex(eigenVal[1]).real,matriks.ndigits)
        eival2_imag_part = round(complex(eigenVal[1]).imag,matriks.ndigits)

        eivec1 = eigenVec[0]
        eivec2 = eigenVec[1]

        eival_real_str = str(f"""\r\r
      {LAMBDA}{SUB_NO[0]}[#ffffff] = [/][#8b58c6]{eival1_real_part if eival1_real_part > math.floor(eival1_real_part) else math.floor(eival1_real_part)}[/]
      {LAMBDA}{SUB_NO[1]}[#ffffff] = [/][#8b58c6]{eival2_real_part if eival2_real_part > math.floor(eival2_real_part) else math.floor(eival2_real_part)}[/]""")
        eival_with_imag_str = str(f"""\r\r
      {LAMBDA}{SUB_NO[0]}[#ffffff] = [/][#8b58c6]{eival1_real_part if eival1_real_part > math.floor(eival1_real_part) else math.floor(eival1_real_part)} {"+" if eival1_imag_part > 0 else "-"} {eival1_imag_part if eival1_imag_part > math.floor(eival1_imag_part) else math.floor(eival1_imag_part)}j[/]
      {LAMBDA}{SUB_NO[1]}[#ffffff] = [/][#8b58c6]{eival2_real_part if eival2_real_part > math.floor(eival2_real_part) else math.floor(eival2_real_part)} {"+" if eival2_imag_part > 0 else "-"} {eival2_imag_part if eival2_imag_part > math.floor(eival2_imag_part) else math.floor(eival2_imag_part)}j[/]""")
        
        eivec_str = str(f"""\r\r
      [#ffffff]V{SUB_NO[0]} =[/#ffffff] Vector({round(eivec1[0],matriks.ndigits)}, {round(eivec1[1],matriks.ndigits)})\r
      [#ffffff]V{SUB_NO[1]} =[/#ffffff] Vector({round(eivec2[0],matriks.ndigits)}, {round(eivec2[1],matriks.ndigits)})
        """)

        if dis_type==0:
            return (eival_real_str,eivec_str) if eival1_imag_part == 0 and eival2_imag_part == 0 else (eival_with_imag_str, eivec_str)
        elif dis_type==1:
            return ([round(eigenVal[0],matriks.ndigits), round(eigenVal[1],matriks.ndigits)],([round(eivec1[0],matriks.ndigits),round(eivec1[1],matriks.ndigits)],[round(eivec2[0],matriks.ndigits),round(eivec2[1],matriks.ndigits)]))
        elif dis_type==2:
            return [round(eigenVal[0],matriks.ndigits), round(eigenVal[1],matriks.ndigits)]
        elif dis_type==3:
            return ([round(eivec1[0],matriks.ndigits),round(eivec1[1],matriks.ndigits)],[round(eivec2[0],matriks.ndigits),round(eivec2[1],matriks.ndigits)])
        else:
            raise TypeError("Argumen `dis_type` hanya bisa dimasukan 0-3, bukan {dis_type}".format(dis_type))

    # Diagonalisasi
    def diagonalisasi(matriks, dis_type:Literal[0,1]=0,out: Literal['D', 'P', 'P**-1', 0]= ...,/):
        out = 0 if out == ... else out
        eival = matriks.eigen(2)
        eivec = matriks.eigen(3)
        D = diag(array([eival[0],eival[1]]))
        P = eivec
        Pinvers = linalg.inv(array([[P[0][0],P[0][1]],[P[1][0],P[1][1]]]))
        A=dot(dot(array([[P[0][0],P[0][1]],[P[1][0],P[1][1]]]),D), Pinvers)
        a, b = D[0]
        c, d = D[1]
        a = a if a.imag != 0 else (a.real if a.real > math.floor(a.real) else math.floor(a.real))
        b = b if b.imag != 0 else int(b.real)
        c = c if c.imag != 0 else int(c.real)
        d = d if d.imag != 0 else (d.real if d.real > math.floor(d.real) else math.floor(d.real))
        if dis_type==0:
            if out=='D':
                return f"D[#ffffff] = [/]Matriks([{D[0][0]} {D[0][1]}] [{D[1][0]} {D[1][1]}])"
            elif out=='P':
                return f"P[#ffffff] = [/]Matriks([{P[0][0]} {P[0][1]}] [{P[1][0]} {P[1][1]}])"
            elif out=='P**-1':
                return f"P{SUP_NO[2]}[#ffffff] = [/]Matriks([{Pinvers[0][0]} {Pinvers[0][1]}] [{Pinvers[1][0]} {Pinvers[1][1]}])"
            elif out==0:
                hasil = str(f"""\r\r
      P[#ffffff]   = [/]Matriks([{P[0][0]} {P[0][1]}] [{P[1][0]} {P[1][1]}])
      D[#ffffff]   = [/]Matriks([{a} {b}] [{c} {d}])
      P{SUP_NO[2]}[#ffffff] = [/]Matriks([{Pinvers[0][0]} {Pinvers[0][1]}] [{Pinvers[1][0]} {Pinvers[1][1]}])

      A[#ffffff]   = [/]Matriks([{matriks.a} {matriks.b}] [{matriks.c} {matriks.d}]) / [[{matriks.a}, {matriks.b}], [{matriks.c}, {matriks.d}]]
                            """)
                return hasil
            else:
                raise TypeError("Parameter hanaya menerima P P**-1 D 0")
        elif dis_type==1:
            if out=='D':
                return D
            elif out=='P':
                return P
            elif out=='P**-1':
                return Pinvers
            elif out==0:
                hasil = (P, D, Pinvers, A)
                return hasil
            else:
                raise TypeError("Parameter hanaya menerima P P**-1 D 0")

    # Print Properti Dari Matriks
    def _Properti_Matriks(matriks) -> str | dict:
        eigenVal,eigenVec = matriks.eigen()
        strip='-'
        spasi=' '
        b_spas = len(list(f'{matriks.a}')) if len(list(f'{matriks.a}')) > len(list(f'{matriks.c}')) else len(list(f'{matriks.c}'))
        if len(list(f'{matriks.b}')) == len(list(f'{matriks.d}')) and (matriks.b >= 0 and matriks.d >=0):
            ad_bspas=0
        elif len(list(f'{matriks.b}')) > len(list(f'{matriks.d}')):
            ad_bspas=len(list(f'{matriks.b}'))
        elif len(list(f'{matriks.b}')) < len(list(f'{matriks.d}')):
            ad_bspas=len(list(f'{matriks.d}'))
        b_strip = len(list(f'{matriks.a}{b_spas*spasi}{matriks.b}'))-(ad_bspas)
        statMatriks = f"""\
[#F1F8E9]Matriks Persegi 2x2[/]\n

    -{(b_strip+ad_bspas)*strip}
    {matriks.a}{(b_spas+(ad_bspas-1 if len(list(f'{matriks.b}')) < len(list(f'{matriks.d}'))else 0))*spasi}{matriks.b}
    -{(b_strip+ad_bspas)*strip}
    {matriks.c}{(b_spas+(ad_bspas-1 if len(list(f'{matriks.b}')) > len(list(f'{matriks.d}'))else 0))*spasi}{matriks.d}
    -{(b_strip+ad_bspas)*strip}
    
    [#E1F5FE]Properti Matriks[/]
    
     [#03A9F4]Determinan[/]
      [#ffffff]D =[/#ffffff] [#00ffd9]{matriks.determinan()}[/]

     [#03A9F4]Trace[/]
      [#ffffff]tr =[/#ffffff] {matriks.a+matriks.d}

     [#03A9F4]Rank[/]
      [#ffffff]rnk =[/#ffffff] {matriks.rank()}

     [#03A9F4]Karakteristik Polynominal[/]
      {matriks.poliK()}

     [#03A9F4]Nilai Eigen[/]\
      {eigenVal}

     [#03A9F4]Vektor Eigen[/]\
      {eigenVec}

     [#03A9F4]Diagonalisasi[/]
      A = P D P{SUP_NO[2]} [bold #E1F5FE]jika[/]
      {matriks.diagonalisasi(0,0)}
        """

        return statMatriks


if __name__ == "__main__":
    A = []
    for i in range(2):
        baris = []
        for j in range(2):
            x = float(input(f"Matriks A{i+1}{j+1} = "))
            baris.append(x)
        A.append(baris)
    x = float(input("M*"))
    print(Matriks_Persegi_2x2(A, x)._Properti_Matriks())

```


