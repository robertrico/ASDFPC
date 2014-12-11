title MATRIX                  
.model large                
.386

.stack 200h
.data
    seed dw 1CD2h

    butts db 160 DUP(0)
.code
main proc
    mov ax,@data
    mov ds,ax

    mov ax,0b800h
    mov es,ax
   
    push ds
    mov ax,@code
    mov ds,ax
    mov ah,25h
    mov al,9
    mov dx,offset intt
    int 21h
    pop ds
    
L1:
    call random
    mov dx,0
    mov cx,160
    div cx
    mov bx,dx

    add bx,offset butts
    call random
    mov cx,32
    mov dx,0
    div cx
    mov [bx],dx

    call movscr
    call prntarr
    call busywait
    mov ax,0
    jmp L1

    mov ax,4C00h
    int 21h
    leave
main endp

prntarr proc
    mov bx,offset butts
    mov cx,0      ;Position in Array
LS:
    cmp byte ptr [bx],0  ;If the position is 0
    je LR

    push cx      ;Put it in the correct array SPOT
    mov ax,cx
    mov cx,2
    mul cx
    mov cx,ax

    call random

    mov si,cx

    mov byte ptr es:[si],al
    inc si
    mov byte ptr es:[si],0010b

    dec byte ptr [bx]
    pop cx
LR:
    inc cx
    inc bx
    cmp cx,160
    je LEE
    jmp LS
LEE:
    ret
prntarr endp

movscr proc
    mov bx,3838d
MovL:
    mov cx,es:[bx]
    call fiftyfity

    cmp bx,0
    je EndMl

    sub bx,2
    jmp MovL
EndMl:
    call clrtop
    ret
movscr endp

fiftyfity proc
    push ax
    push dx
    call random
    cmp ax,0Dh
    jl LTT

    mov ch,02h
    mov es:160[bx],cx

    jmp ER
LTT:
    call random
    cmp ax,0Dh
    jl LTR
    mov ch,02h
    cmp cl,0
    je LTR
    mov es:320[bx],al
LTR:

    mov ch,0Ah
    mov es:160[bx],cx
    jmp ER

ER:
    pop dx
    pop ax
    ret

fiftyfity endp

random proc
    mov ax, 7fDh
    mul seed
    xor dx, dx
    add ax, 269h
    mov seed, ax
    ret
random endp

busywait proc
    push cx
    mov ecx,200000000
bw:
    cmp ecx,0
    je br
    loop bw
br:
    pop cx
    ret
busywait endp

clrtop proc
    push bx
    mov bx,0  ;Start at First Char in Row
CR:

    cmp bx,160      ;Are we past the last spot?
    je EndC
    mov es:[bx],0
    add bx,2
    jmp CR

EndC:
    pop bx
    ret
clrtop endp
intt proc
    cli
    mov ax,4C00h
    int 21h
    sti
    iret
intt endp
end
   
