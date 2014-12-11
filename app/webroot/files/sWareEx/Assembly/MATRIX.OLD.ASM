title MATRIX                  
.model small                 

.stack 100h
.data
       message db 20h,5h,20h,1h,20h,7h,20h,99h,20h,54h,40h,20h,"Hello World",20h,20h,24h 
.code
leave MACRO
        mov ax,4C00h
        int 21h
ENDM
main proc
       mov ax,@data
       mov ds,ax

       mov ax,0b800h
       mov es,ax

       mov bx,0
       mov cx,0

       mov ax,160
       mul cx
       shl bx,1
       add bx,ax
mLoop:
       mov si,offset message
       call msgloop
       jmp mLoop
       leave
main endp
msgloop proc
L1:
       mov al,[si]    ;random number should be inserted here
       cmp al,24h
       je L2
       add bx,200
       mov ah,0Ah
       inc si
       mov es:[bx],ax
       jmp L1
L2:
       ret
msgloop endp
end
