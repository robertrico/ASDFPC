title MATRIX                  
.model large                

.stack 100h
.data
    seed dw 1234h
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
    mov cx,0   ; moves rows down

D:
    call horiz
    add bx, 160
    jmp D
   ; leave
main endp

horiz proc
    push cx
    mov cx,10 ;# of Places in s
B1:
    call msg
    add bx,10
    loop B1
    pop cx
    ret
horiz endp

msg proc
    call random
    mov ah,0Ah
    mov es:[bx],ax
    ret
msg endp

movstr proc
    push cx
    mov cx,15
MO:
    add bx,160
    call msg
    loop MO
    ret
movstr endp

random proc
    mov ax, 7fDh
    mul seed
    xor dx, dx
    add ax, 269h
    mov seed, ax
    ret
random endp
dim proc
     mov ax,160
     mul cx
     shl bx,1
     mov ax,bx
     ret
dim endp

busywait proc
    push cx
    mov cx,0FFh
bw:        
    loop bw
    pop cx
    ret
busywait endp


end
