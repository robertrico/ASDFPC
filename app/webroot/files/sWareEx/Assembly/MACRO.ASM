title IndirectLoops
.model small
.stack 100h
.data
        Y dw ?     ;Data Initialize
	Sum dw ?
	W dw ?
        ent db 0dh,0ah,"Enter a number up to 5 digits:",20h,'$'
        msg db 0dh,0ah,"Sum is: "
        dig db 0,0,0,0,0
	db 0dh,0ah
        db "  W is: " 
        dig2 db 0,0,0,0,0
        db 0dh,0ah,'$'

.code
getch MACRO
        mov ah,7
        int 21h
        mov ah,2
        mov dx,ax
        int 21h

ENDM
doConvert MACRO regA
        sub regA,30h
        add bx,regA
ENDM
getInt MACRO num
        add num,30h
        mov dx,num
ENDM
doCompute MACRO Sum,num
        add Sum,num
ENDM
indirAdd MACRO arr,var
        mov si, offset arr
        mov ax,var
        call insert

ENDM
arrPrint MACRO arr
        mov si, offset arr
        call print
ENDM
main proc
        mov ax, @data ;Initialize Data
        mov ds, ax

        arrPrint ent

        call keyput   ;Obtain Input From User

        call doMath   ;Do all the math

        call arrInsert ;Insert converted values into array

        arrPrint msg

	mov ax, 4C00h
	int 21h
main endp
doMath proc

        mov ax,bx     ;Assign Input Value to AX Register
        dec ax        ;Subtract 1 from Y

        doCompute Sum,36
        doCompute Sum,ax
        push ax       ;Preserve AX to be used for Another Division

        mov cx,4      ; y/4
        call divnum
        doCompute Sum,ax

        pop ax

        mov cx,100    ;y/100
        call divnum
        doCompute Sum,ax

        mov cx,7      ;Mod Sum by 7
        call divnum
        doCompute W,dx
        doCompute W,1
        
        ret
doMath endp
arrInsert proc
        indirAdd dig,Sum
        indirAdd dig2,W
        ret
arrInsert endp
print proc                  ;Print Loop
        mov ah,2            ;Prints Converted Characters to console
PrintLoop:
        mov dl,[si]
        cmp dl,24h
        je EndPrint
        mov ah,2
        int 21h
        inc si
        jmp PrintLoop
EndPrint:
        ret
print endp

insert proc
        doCompute si,4   ;Insert Procedure Inserts Converted ASCII
        mov dx,0
        mov bx,10

inLoop:
        cmp ax,0
        je Endin
	div bx
        getInt dx
        mov [si],dl
        mov dx,0
        dec si
        jmp inLoop
Endin:
        ret

insert endp

divnum proc
                  ;Simple Division Procedure
        mov dx,0  ;After Calling using DX will obtain Modulus
        div cx
        ret

divnum endp

keyput proc

        mov bx,0
        mov cx,10
input:

        getch
        cmp al, 0dh    ;Jump if the return key is pressed
        je Endput

        mov dx,0        ;Reset to ensure proper calculations
        mov ah,0

        push ax
        mov ax,bx
        mul cx
        mov bx,ax


        pop ax
        doConvert ax
        jmp input

Endput:   
        
        ret
keyput endp

end 
