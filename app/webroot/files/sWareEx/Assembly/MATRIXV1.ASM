.model small
.stack 100
;.386
.data
seed dw 1234h
.code
;COMMENT @
Delay proc 
    push cx
    mov cx,0FFh
D1:
    loop D1
    pop cx
    ret
delay endp


main proc
    mov cx,0
    mov bx,0
;L1:
    mov ax,@data
    mov ds,ax
;L1:            
    mov ax, 0b800h  ;
    mov es, ax
        
    mov bx,10
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
 L1:               
    call Delay

    mov es:[bx],10
    ;inc cx
    ;mov ax, 0b800h  ;
    ;mov es, ax
        
    mov bx,10
    ;mov cx,0    
        
    mov ax,160
    mul cx
    shl bx,1
    add bx,ax
        
    mov al,'M'
    mov ah, 02h
    mov es:[bx],ax
    inc cx
    ;call Delay
    ;mov es:[bx],10      
jmp L1

main endp
end main
