title IndirectLoops
.model small
.stack 100h
.data
        message db 20h,20h,20h,20h,11,6h,12h,'w',7,52h
        
.code
leave MACRO
        mov ax,4C00h
        int 21h
ENDM
main proc
        mov ax,@data
        mov ds,ax

        call Clears

        mov ah,1
        mov cx,2607h
        int 10h

        mov ah,2
        mov dh,1
        mov dl,1
        mov bh,0

        mov ax,0600h
        mov bh,00Ah
        mov cx,0
        mov dx,0ffffh
        int 10h
        mov cx,20
L3:
        mov ah,01
        int 16h
        cmp al,0dh
        jne L5
        leave

L5:
       mov si,offset message
       call vertS
       mov [si],ax
       jmp L3

main endp
vertS PROC
        mov si,offset message
        mov cx,SIZEOF message
L1:      
        push cx
        mov ah,9
        call moveCursor
        mov al,[si]
        cmp al,20h
        je CONT

       ; call random
CONT:

        mov bh,0
        mov bl,0Ah
        mov cx,1
        int 10h
        mov cx,1
        
        inc si
        pop cx
        loop L1
        ret
vertS endp
Clears PROC
        push ax
        mov ax,0600h
        mov cx,0
        mov dx,184Fh
        mov ah,7
        call moveCursor
        int 10h
        mov ah,2
        mov bh,0
        mov dx,0
        int 10h

        pop ax
        ret
Clears ENDP
moveCursor PROC
        push ax
       
LUP:
        push cx
        mov ah,3
        mov bh,0
        int 10h
                 
        inc dh
       
        cmp dh,24
        jl CMPLUP
        inc dl

CMPLUP:
        mov ah,2
        int 10h
        pop cx
EndCmp:
        LOOP LUP
        pop ax
        ret
moveCursor ENDP
random proc
        push dx
        push cx
        push bx

        mov ah,00h
        int 1ah
        
        add al,dl

        pop bx
        pop cx
        pop dx
        ret
        
random endp


end

