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

       mov bx,0  ; moves cul
       mov cx,0   ; moves rows down

       mov ax,160 ; one dem to two dem.


       mul cx
       shl bx,1
       add bx,ax

mLoop:
      
      call msgloop
       jmp mLoop
       leave
main endp
msgloop proc
L1:
      
       call longrandom
       call busywait 
       cmp al,24h  ; $
       
       je L2
       
       add bx,200
       mov ah,0Ah  ; color 
       inc si
       mov es:[bx],ax

       jmp L1
L2:
       ret
msgloop endp
longrandom proc
       mov ax, 3fDh
       mul seed
       xor dx, dx
       add ax, 269h
       mov seed, ax
           
       ret
longrandom endp

busywait proc
        push cx
        mov cx,0FFh
bw:        
        loop bw
        pop cx
        ret
busywait endp


end
