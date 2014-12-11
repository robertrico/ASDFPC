.model small
.stack 100
;.386
.data
seed dw 1234h
.code
;COMMENT @
Delay proc 
    mov si, 0
    L2:
    cmp si,10
    je L2End
    inc si
    jmp L2
    L2End:	
    ret
delay endp


main proc
    mov cx,0
    mov bx,0
L1:
    mov ax,@data
    mov ds,ax
            
    mov ax, 0b800h
    mov es, ax
        
    mov bx,1
    ;mov cx,0    
        
    mov ax,160
    mul cx
    shl bx,1
    add bx,ax
        
    mov al,'M'
    mov ah, 02h
    mov es:[bx],ax
    inc cx
    ;inc bx
                
    ;call Delay
    ;mov es:[bx],10
    ;inc cx
          
jmp L1

main endp
end main
