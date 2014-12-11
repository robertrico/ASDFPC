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
        cmp al,0dh
        mov ah,2
        mov dx,ax
        int 21h

ENDM

getInt MACRO num
        add num,30h
        mov dx,num
ENDM

doConvert MACRO regA
        sub regA,30h  ;Convert
        add bx,regA
        
ENDM
doCompute MACRO Sum,num
        add Sum,num
ENDM

divNum MACRO den,Y
        mov ax,Y
        mov cx,den  ;Simple Division Procedure
        mov dx,0  ;After Calling using DX will obtain Modulus
        div cx
ENDM

main proc
        mov ax, @data ;Initialize Data
        mov ds, ax

        mov si,offset ent
        call print
        call keyput   ;Obtain Input From User

        mov ax,bx     ;Assign Input Value to AX Register
        dec ax
        mov Y,ax

        doCompute Sum,36
        doCompute Sum,ax

        push ax       ;Preserve AX to be used for Another Division
        divNum 4,Y
        doCompute Sum,ax


        pop ax
        divNum 100,Y
        doCompute Sum,ax


        divNum 7,Sum
        doCompute W,dx
        doCompute W,1

        mov si,offset dig  ;Prepare ASCII Conversion
        mov ax,sum        
        call ins    ;Insert Converted Characters into Array

        mov si,offset dig2  ;Prepare ASCII Conversion
        mov ax,w
        call ins    ;Insert Converted Characters into Array

        mov si,offset msg
        call print         ;Print Final Results

	mov ax, 4C00h
	int 21h
main endp

ins proc
        
        add si,4
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
ins endp


print proc                  ;Print Loop
        mov ah,2            ;Prints Converted Characters to console
PrintLoop:
        mov dl,[si]
        cmp dl,24h
        je EndPrint
        int 21h
        inc si
        jmp PrintLoop
EndPrint:
        ret
print endp

keyput proc

        mov bx,0
        mov cx,10
input:

        getch
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
