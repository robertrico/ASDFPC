title 35 Progz
.model small
.stack 100h
.data
    Y dw ?
     
    msg db "Sum is: "
    dig db 0,0,0,0,0
    db 0dh,0ah,"W is: "
    dig2 db 0,0,0,0,0
    db '$'
    Sum dw ?       
    W dw ?     

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

    mov cx,4  ;divide by 4
	mov dx,0
	div cx
    add bx,ax ;end div by 4
    
    mov cx,100 ;div by 100
	mov ax,Y
	mov dx,0
	div cx
    add bx,ax ;end div by 4

	mov Sum,bx

    mov cx,7  ;prepare mod by 7
	mov ax,bx
	mov dx,0
	div cx
    inc dx     ;% is in dx
    mov W,dx   ;move remainder to W

        mov si,offset Sum
        mov ax,[si]
        add si,4

SumLoop:
        cmp ax,0
        je EndSum
        mov dx,0  ;start decomposition of Sum
        mov cx,10
        div cx
        add dx,48 ;30 in hex is 48 in DEC
        add [si],dl
        dec si
        jmp SumLoop
EndSum:
        mov si,offset W
        add si,4
            
WLoop:  cmp si,0
        je EndW       
        mov dx,0  ;start decomposition of W
        mov cx,10
        div cx
        add dx,48 ;30 in hex is 48 in DEC
        add [si],dl
        jmp WLoop
EndW:
        mov si,offset msg
        mov ah,2
PrintLoop:
        cmp si,24h
        je EndPrint
        mov dl,[si]
        int 21h
        inc si
        jmp PrintLoop
EndPrint:

        mov ax, 4C00h
	int 21h

main endp
end main	
