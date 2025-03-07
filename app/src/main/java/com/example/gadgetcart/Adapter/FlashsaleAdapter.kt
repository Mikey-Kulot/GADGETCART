package com.example.gadgetcart.Adapter

import android.view.LayoutInflater
import android.view.ViewGroup
import androidx.recyclerview.widget.RecyclerView
import com.bumptech.glide.Glide
import com.example.gadgetcart.databinding.FlashsaleItemBinding
import com.example.gadgetcart.model.FlashsaleModel

class FlashsaleAdapter(
    private val sliderItems: List<FlashsaleModel>
) : RecyclerView.Adapter<FlashsaleAdapter.SliderViewHolder>() {

    class SliderViewHolder(private val binding: FlashsaleItemBinding) :
        RecyclerView.ViewHolder(binding.root) {

        fun bind(sliderItem: FlashsaleModel) {
            Glide.with(binding.root.context)
                .load(sliderItem.image)
                .into(binding.flashSlider)
        }
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): SliderViewHolder {
        val binding = FlashsaleItemBinding.inflate(LayoutInflater.from(parent.context), parent, false)
        return SliderViewHolder(binding)
    }

    override fun onBindViewHolder(holder: SliderViewHolder, position: Int) {
        holder.bind(sliderItems[position])
    }

    override fun getItemCount(): Int = sliderItems.size
}
