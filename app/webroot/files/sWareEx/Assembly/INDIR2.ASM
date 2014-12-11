title IndirectLoops
.model small
.stack 100h
.data
        Y dw ?     ;Data Initialize
	Sum dw ?
	W dw ?
 
        msg db "Sum is: "
        dig db 0,0,0,0,0
	db 0dh,0ah
        db "  W is: " 
        dig2 db 0,0,0,0,0
	db '$'

.code
main proc
        mov ax, @data 
        mov ds, ax

	mov ax,2000
	mov Y, ax

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
