title IndirectLoops
.model small
.stack 100h
.data
        Y dw ?     ;Data Initialize
	Sum dw ?
	W dw ?
        keys db 6h,6h,6h,6h,6h,6h
        msg db 0dh,0ah,"Sum is: "
        dig db 0,0,0,0,0
	db 0dh,0ah
        db "  W is: " 
        dig2 db 0,0,0,0,0
        db 0dh,0ah
	db '$'

.code
main proc
        mov ax, @data 
        mov ds, ax


        mov al,0
        mov ah,7
        mov si,offset keys
        mov cx,0
Keyput:
        int 21h
        cmp al,0Dh    ;jump when carriage return is entered
        je Endput

        mov [si],al
        mov dl,[si]
        mov ah,2
        int 21h
        mov ah,7
        inc si
        inc cx
        jmp Keyput
Endput:
        dec cx
        mov si,offset keys
        mov ax,0
               
ChangeVal:
        
        mov al,[si]
        cmp al,6h
        je EndChange
        sub al,30h
        mov [si],al
        inc si
        jmp ChangeVal
EndChange:

        mov si, offset keys
        add si,cx
        inc cx
        mov bx,1
        mov ax,0

GetVal:
        mov al,[si]
        mov ah,0
        mul bx
        mov dx,0
        add Y,ax
        dec si
        mov ax,bx
        mov dx,10
        mul dx
        mov dx,0
        mov bx,ax
        loop GetVal
EndVal:



        
        mov ax,y

	dec ax
	mov y, ax

        mov bx,36  
	add bx,ax
        mov dx,0
        mov cx,4
	div cx
        add bx,ax      ;Sum + 36 + y/4

	mov cx,100
        mov dx,0
        mov ax,Y
	div cx
	add bx,ax
        mov Sum,bx       ;Sum + Y/100

	mov cx,7
	mov dx,0
        mov ax,bx
	div cx
        inc dx   ;Mod 7+1
	mov W,dx

        mov dx,0
        mov si,offset dig
        add si,4
        mov ax,sum
        mov bx,10

SumLoop:
        cmp ax,0
        je EndSum
        div bx
        add dx,30h
        mov [si],dl
        mov dx,0
        dec si
        jmp SumLoop
EndSum:
        mov si,offset dig2
	add si,4
	mov ax,w
WLoop:
        cmp ax,0
        je EndW
	div bx
	add dx,30h
	mov [si],dl
        mov dx,0
        dec si
        jmp WLoop
EndW:

        mov ah,2
        mov si,offset msg
PrintLoop:
        mov dl,[si]
        cmp dl,24h
        je EndPrint
        int 21h
        inc si
        jmp PrintLoop
EndPrint:

	mov ax, 4C00h
	int 21h
main endp
end main
