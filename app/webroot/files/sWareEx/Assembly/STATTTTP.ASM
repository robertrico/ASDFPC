title Hate
.model small
.486
public ran
.stack 100h
.data
	seed DWORD 12345678h
	cols db 80 dup(0)
.code
main proc
	mov ax, @data
        mov ds, ax
	mov ax, 0b800h
	mov es, ax

l1:
	mov cx, 80
	mov bx, 24
	call ran
	div cx
	mov si, dx
	add si, offset cols
	call ran
	div bx
	mov [si], dl
	mov bx, 3838
movdowns:
	cmp bx, 0
	je movdowne
	mov ax, es:[bx]
	add bx,160
	mov es:[bx], ax
	sub bx,162
	jmp movdowns
movdowne:
	mov si, offset cols
	mov cx, 0
writechars:
	cmp cx,80
	je writechare
	add si, cx
	cmp [si], 0	;see if chars to write
	je eif		;no chars then jump past if
	call ran	;start of if statement
	mov bx, 60h	
	div bx
	add dl, 20h
	push cx
	mov ax, cx
	mov cx, 2
	mul cl
	mov bx, ax
	mov es:[bx], dl	;write char to screen
	pop cx
	mov bx, [si]
	dec bx		;lower chars to write
	mov [si], bx
	sub si, cx
eif:			;end of if statement
	inc cx
	jmp writechars
writechare:
l2:
	
	mov ax, 4C00h
	int 21h
main endp
ran proc 
	mov eax, 343fdh
	imul seed 
	add eax, 269ec3h
	mov seed, eax
	ror eax, 8
	shld edx, eax, 16
	mov dx, 0
	ret
ran endp
end main