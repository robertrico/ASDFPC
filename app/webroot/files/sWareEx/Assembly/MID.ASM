title MidTerm
.model small
.stack 100h
.data
        array dw 16,25,300,43,28,122,0dh
        count db 0
.code
main proc
        mov ax,@data
        mov ds,ax

        mov si,offset array

GetCount:
        cmp [si],0dh
        je EndCount
        add si,2
        inc count
        jmp GetCount
EndCount:

        mov si,offset array
        mov ax,0
        mov bx,0
        mov cl,count
        mov ax,[si]
Step:
        cmp [si],cl
        jz EndStep
        add si,2
        mov bx,[si]
        sub si,2
        mov [si],bx
        add si,2
        dec cl
        jmp Step

EndStep:
        sub si,2
        mov [si],ax

        mov ax,4C00h
        int 21h
main endp
end main



        
