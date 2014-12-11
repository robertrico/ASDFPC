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
	mov ax,@data
	mov ds,ax
	mov ax, 0b800h
	mov es, ax

	push ds
	mov ax,@code
	mov ds,ax
	mov ah, 25h
	mov al,9
	mov dx,offset myint
	int 21h
	pop ds
lop:
	l1:
	mov cx, 80
	mov bx, 24
	call ran
	div cx
	mov si, dx
	add si, offset cols
	call ran
	div bx
	mov [si], dl ;how many characters in spot

	mov bx, 3838
movdowns:
	mov ax, es:[bx]
	mov es:160[bx], ax
	cmp bx, 0
	je movdowne
	sub bx, 2
	jmp movdowns
movdowne:

;;note to self clear first line\
	mov cx, 79
	mov bx, 2
lineclears:
	mov ax, cx
	mul bl
	mov si,ax
	mov byte ptr es:[si],0h
	cmp cx,0
	je linecleare
	dec cx
	jmp lineclears
linecleare:

	mov si, offset cols
	mov cx, 0
writechars:
	cmp cx,80
	je writechare
	add si, cx
	cmp byte ptr[si], 0	;see if chars to write
	je eif		;no chars then jump past if
	call ran	;start of if statement
	mov bx, 60h	;set how many of the characters form ascii you want
	div bx		
	add dl, 20h	;set the range of these characters
	push cx
	mov ax, cx
	mov cx, 2
	mul cl
	mov bx, ax
	mov byte ptr es:[bx], dl	;write char to screen
	inc bx 
	mov byte ptr es:[bx], 0ah 
	mov bx, [si]
	dec bx		;lower chars to write
	mov [si],  bx
	pop cx
eif:			;end of if statement
	sub si, cx
	inc cx
	jmp writechars
writechare:
	call busywait
	jmp l1
l2:
	jmp lop

	mov ax,4c00h
	int 21h
main endp
myint proc
	cli
	mov ax,4c00h
	int 21h
	iret
	sti
myint endp
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
busywait proc
	mov ecx,300000000
fance:
	cmp ecx,0
	je fancy
	sub ecx,1
	jmp fance
fancy:
	ret
busywait endp
end main