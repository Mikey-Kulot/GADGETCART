package com.example.gadgetcart.Adapter

import android.view.LayoutInflater
import android.view.ViewGroup
import android.widget.ImageView
import androidx.recyclerview.widget.RecyclerView
import com.bumptech.glide.Glide
import com.example.gadgetcart.R
import com.example.gadgetcart.databinding.ViewholderPicBinding

class PicAdapter(
    private val items: MutableList<String>,
    private val onImageSelected: (String) -> Unit
) : RecyclerView.Adapter<PicAdapter.Viewholder>() {

    private var selectedPosition = -1
    private var lastSelectedPosition = -1

    inner class Viewholder(val binding: ViewholderPicBinding) : RecyclerView.ViewHolder(binding.root)

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): Viewholder {
        val binding = ViewholderPicBinding.inflate(LayoutInflater.from(parent.context), parent, false)
        return Viewholder(binding)
    }

    override fun onBindViewHolder(holder: Viewholder, position: Int) {
        val item = items[position]
        holder.binding.pic.loadImage(item)

        holder.binding.root.setOnClickListener {
            val adapterPosition = holder.adapterPosition
            if (adapterPosition == RecyclerView.NO_POSITION) return@setOnClickListener

            lastSelectedPosition = selectedPosition
            selectedPosition = adapterPosition
            notifyItemChanged(lastSelectedPosition)
            notifyItemChanged(selectedPosition)
            onImageSelected(item)
        }

        if (selectedPosition == holder.adapterPosition) {
            holder.binding.picLayout.setBackgroundResource(R.drawable.blue_bg_selected)
        } else {
            holder.binding.picLayout.setBackgroundResource(R.drawable.grey_bg)
        }
    }

    override fun getItemCount(): Int = items.size

    private fun ImageView.loadImage(url: String) {
        Glide.with(this.context)
            .load(url)
            .into(this)
    }
}
